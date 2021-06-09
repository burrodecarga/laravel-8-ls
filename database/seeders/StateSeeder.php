<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Focal;
use App\Models\Level;
use App\Models\Salary;
use App\Models\State;
use App\Models\Schedule;
use App\Models\Skill;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json =File::get("database/data/states.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $estado = new State();
         $estado->name = $obj->name;
         $estado->slug = Str::slug($obj->name);
         $estado->abbreviation = $obj->abbreviation;
         $estado->save();
        }

        $json =File::get("database/data/schedules.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $schedule = new Schedule();
         $schedule->name = $obj->name;
         $schedule->slug = Str::slug($obj->name);
         $schedule->class = $obj->class;
         //var_dump(($obj->name));
         $schedule->save();
        }

        $sal=500;
        $i=0;
        $salario = new Salary();
            $salario->min_salary=1;
            $salario->max_salary=499;
            $salario->save();

        for ($i=0; $i < 15 ; $i++) {
            $salario = new Salary();
            $salario->min_salary=$sal;
            $salario->max_salary=$sal*1.5;
            $salario->save();
            $sal = $sal*1.5+1;
        }


        $json =File::get("database/data/categories.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $category = new Category();
         $category->name = $obj->name;
         $category->slug = Str::slug($obj->name);
         //var_dump(($obj->name));
         $category->save();
        }

        $json =File::get("database/data/level.json");
        $data = json_decode($json);

        foreach ($data as $obj) {
            $level = new Level();
            $level->name =$obj->name;
            $level->class= $obj->class;
            $level->save();
      }


        $json =File::get("database/data/data.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
         $skill = new Skill();
         $skill->name = $obj->name;
         $skill->slug = Str::slug($obj->name);
         $skill->category = $obj->category;
         $skill->category_id = $obj->category_id;
         //var_dump(($obj->name));
         $skill->save();
        }

        $json =File::get("database/data/focal.json");
        $data = json_decode($json);

        foreach ($data as $obj) {

          $focal = new Focal();
          $focal->title = $obj->title;
          $focal->slug = Str::slug($obj->title);
          $focal->description = $obj->description;
          $focal->link = $obj->link;
          $focal->pdf = $obj->pdf;
          $focal->video = '$obj->video';
          $focal->save();
        }

         $json =File::get("database/data/base.json");
         $data = json_decode($json);

          foreach ($data as $obj) {

                $focal = Focal::find($obj->id);
                $focal->video = $obj->video;
                $focal->save();
          }

          $json =File::get("database/data/rutas.json");
         $data = json_decode($json);

          foreach ($data as $obj) {

                $permission = new Permission();
                $permission->name = $obj->name;
                $permission->permission = $obj->route;
                $permission->save();
          }






    }

}
