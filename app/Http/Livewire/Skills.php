<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Skills extends Component
{
    use WithPagination;

    public $category;
    public $skill;
    public $skillId=0;
    public $create ='';
    public $update ='hidden';

    protected  $rules = ['category' => 'required','skill' => 'required|max:100','skillId'=>'numeric'];


    public function render()
    {
        $categories = Category::orderBy('name')->get();
        $skills = Skill::orderBy('created_at','desc')->paginate(100);
        $res = Skill::all('id','category_id','category','name','slug')->toJson();
       //dump($res);
        return view('livewire.skills',[
            'skills' =>$skills,
            'categories' =>$categories
        ]);
    }


    public function destroy(Skill $skill)
    {
        $skill->delete();
    }

    public function store()
    {
     $values = $this->validate($this->rules);
     $res = Category::find($this->category);
     Skill::create([
         'category' => $res->name,
         'category_id' => $res->id,
         'name' => $this->skill,
         'slug' => Str::slug($this->skill),
     ]);
     $this->reset();
     $this->render();
    }

    public function update()
    {
     $values = $this->validate($this->rules);
     $reg = Skill::find($this->skillId);
     $res = Category::find($this->category);

     $reg->name = $values['skill'];
     $reg->slug = Str::slug($values['skill']);
     $reg->category = $res->name;
     $reg->category_id = $res->id;
     $reg->save();
    //  $this->reset();
    //  $this->render();
    }

    public function edit(Skill $skill)
    {
       $this->create ='hidden';
       $this->update = '';
       $this->category = $skill->category_id;
       $this->skill = $skill->name;
       $this->skillId = $skill->id;

    }
}
