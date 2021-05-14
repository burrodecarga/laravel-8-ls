<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Skill;
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
      

    }
}
