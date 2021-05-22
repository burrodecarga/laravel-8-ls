<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsForm extends Component
{
    use WithPagination;

    public $category;
    public $selectCategory=[];
    public $selectSkills=[];
    public $skill;
    public $skillId=0;
    public $create ='';
    public $update ='hidden';


    protected  $rules = ['category' => 'required','skill' => 'required|max:100','skillId'=>'numeric'];
    public function render()
    {
        $categories = Category::orderBy('name')->get();
        return view('livewire.skills-form',[
            'categories' =>$categories,
            'selectCategory' =>$this->selectCategory,
        ]);
    }

    public function getCategory()
    {
        $category = Category::find($this->category);
        $this->selectCategory = $category->skills;
    }


}
