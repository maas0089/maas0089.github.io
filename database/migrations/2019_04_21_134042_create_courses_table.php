Table name: courses  Migration File: 2019_04_21_000000_create_courses_table.php

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'courses';

    /**
     * Run the migrations.
     * @table courses
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 45);
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->unsignedInteger('term_id')->nullable();

            $table->index(["term_id"], 'term_id_idx');


            $table->foreign('term_id', 'term_id_idx')
                ->references('id')->on('terms')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}