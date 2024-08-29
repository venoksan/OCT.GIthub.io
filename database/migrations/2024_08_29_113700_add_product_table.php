<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
      /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->string('NamaProduct')->default('')->notNull;
            $table->string('Jenis')->default('')->notNull;
            $table->string('Kadaluarsa')->default('')->notNull;
            $table->string('Jumlah')->default(0)->notNull;
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('Product', function (Blueprint $table) {
            $table->dropColumn(['NamaProduct', 'Jenis', 'Kadaluarsa', 'Jumlah']);
        });
    }
};
