<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCpfDataNascimentoSobrenomeTelefone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table) {
            $table->string('cpf')->after('id');
            $table->string('last_name')->after('name');
            $table->date('data_nascimento')->after('last_name');
            $table->string('telefone_contato')->after('data_nascimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table) {
            $table->dropColumn('cpf');
            $table->dropColumn('last_name');
            $table->dropColumn('data_nascimento');
            $table->dropColumn('telefone_contato');
        });
    }
}
