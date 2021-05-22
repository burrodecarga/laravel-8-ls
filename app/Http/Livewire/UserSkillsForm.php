<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Knowledge;
use App\Models\Level;
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
    public $myLevel;
    public $level;

    protected  $rules = ['category' => 'required','skillId'=>'numeric','myLevel'=>'required'];

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $levels = Level::all();
        return view('livewire.user-skills-form',[
            'categories' =>$categories,
            'selectCategory' =>$this->selectCategory,
             'levels' =>$levels
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
             'level'=>$this->myLevel,
             'status'=>1
          ]);

        $this->emit('dibujar');
        $this->emitTo('UserSkills','render');
           }
        if(!is_null($listOfSkills)){

              $cat = Category::find($this->category);

        foreach($listOfSkills as $list){

         $record =Skill::find($list);
         $new = Knowledge::create([
             'category_id'=>$cat->id,
             'category'=>$cat->name,
             'name'=>$record->name,
             'slug'=> $record->slug,
             'user_id'=>auth()->user()->id,
             'level'=>$this->myLevel
          ]);


        }
      }
        $this->reset();
        $this->emit('dibujar');
        $this->emitTo('SkillsTable','render');

        $this->emit('alert', 'Your Skill was created successfully');
    }
}
