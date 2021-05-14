<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use Illuminate\Support\Str;
use Livewire\Component;

class CategoryList extends Component
{

    public $categoryId;
    public $habilidad=null;
    public $skillId;
    public $skillName;
    public $levelId;
    public $showModalSkill='hidden';
    public $tag='';
    public $level;

    protected $rules =['tag' =>'required','level'=>'required','skillId'=>'required|numeric','categoryId'=>'required|numeric'];

    public function render()
    {
        $categories = Category::orderBy('name')->get();
        if($this->categoryId){
            $skillsOfCategory = Skill::where('category_id',$this->categoryId)->get();
             }else{$skillsOfCategory =[];}
        return view('livewire.category-list',[
            'categories' =>$categories,
            'skillsOfCategory' => $skillsOfCategory,
        ]);
    }

    public function createSkill($s,$c)
    {
        $this->habilidad = Skill::find($s);
        $this->categoryId =$c;
        $this->skillId =$s;
        $this->skillName = $this->habilidad->name;
        $this->showModalSkill = '';
    }

    public function storeSkill(){
        $values = $this->validate($this->rules);
        $user = auth()->user();
        $skill = Skill::find($values['skillId']);
        $user->skills()->attach($skill);
        $tag = Tag::create([
            'user_id' =>$user->id,
            'skill_id' =>$skill->id,
            'skill' => $skill->name,
            'category' =>$skill->category,
            'tag' => $values['tag'],
            'level' =>$values['level'],
            'slug' => Str::slug($values['tag']),
                    ]);

                    $this->reset();
                    $this->emit('alert', 'Skill was created successfully');
                    $this->emit('listOfSkills');
    }
}
