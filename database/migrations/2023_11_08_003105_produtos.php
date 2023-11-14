<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Isso é equivalente a `id int not null auto_increment`
            $table->string('nome', 100);
            $table->float('valor');
            $table->integer('quantidade');
            $table->string('descricao', 300)->nullable();
            $table->timestamps(); // Isso cria automaticamente as colunas `created_at` e `updated_at`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
