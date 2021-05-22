<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Knowledge;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class UserSkillsForm extends Component
{
    use WithPagination;

    public $category;
    public $selectCategory=[];
    public $selectSkills;
    public $skill;
    public $skillId=0;
    public $create ='';
    public $update ='hidden';

    protected  $rules = ['category' => 'required','skillId'=>'numeric'];

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        // $skills = auth()->user()->skills;
        // $knowledge = auth()->user()->knowledge;
        return view('livewire.user-skills-form',[
            'categories' =>$categories,
            'selectCategory' =>$this->selectCategory,
            // 'skills' =>$skills,
            // 'knowledge' =>$knowledge
        ]);
    }

    public function getCategory()
    {
        $category = Category::find($this->category);
        $this->selectCategory = $category->skills;
    }

    public function store()
    {
     $values = $this->validate($this->rules);
     $newSkill = $this->skill;
     $listOfSkills = $this->selectSkills;
     if(is_null($listOfSkills) AND empty($newSkill)){
        return redirect()->back()->with('msg', 'The Message');
     }



     if(!empty($newSkill)){
         $cat = Category::find($this->category);
         $new = Knowledge::create([
             'category_id'=>$cat->id,
             'category'=>$cat->name,
             'name'=>$newSkill,
             'slug'=> Str::slug($newSkill),
             'user_id'=>auth()->user()->id,
          ]);
        //  if(!is_null($listOfSkills)){
        //   array_push($listOfSkills, $new->id);
        //  }else{
        //     $listOfSkills[]=$new->id;
        //  }
        $this->emit('dibujar');
        $this->emitTo('UserSkills','render');
           }
        if(!is_null($listOfSkills)){
        auth()->user()->skills()->sync($listOfSkills);
      }
        $this->reset();
        $this->render();
        $this->emit('alert', 'Your Skill was created successfully');
    }
}
