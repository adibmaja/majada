 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
             $table->string('student_name');
              $table->string('student_email');
               $table->string('password');
                $table->date('dob');
                 $table->integer('phone');
                  $table->string('photo');
                   $table->string('biodata_file');
                    $table->string('group');
                     $table->string('gender');
                      

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
