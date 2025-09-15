<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hkdiamondstock', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('Sr_No')->nullable();
            $table->string('Stock_NO', 100)->nullable();
            $table->string('Shape', 60)->nullable()->index('isx_shape');
            $table->float('Carat', 10, 0)->nullable()->index('idx_carat');
            $table->string('Clarity', 100)->nullable()->index('idx_clarity');
            $table->string('Color', 100)->nullable()->index('idx_colour');
            $table->string('Color_Shade', 100)->nullable();
            $table->float('Rap_Rate', 10, 0)->nullable();
            $table->float('Rap_Vlu', 10, 0)->nullable();
            $table->float('Rap__', 10, 0)->nullable();
            $table->float('Pr_Ct', 10, 0)->nullable();
            $table->float('Amount', 10, 0)->nullable()->index('Amount');
            $table->float('TD_', 10, 0)->nullable();
            $table->float('Tab_', 10, 0)->nullable();
            $table->string('Cut', 50)->nullable()->index('idx_cut');
            $table->string('Polish', 50)->nullable();
            $table->string('Symmetry', 50)->nullable();
            $table->string('Flourescent', 50)->nullable();
            $table->string('Measurements', 50)->nullable();
            $table->string('Lab', 50)->nullable();
            $table->string('H_A', 50)->nullable();
            $table->string('CUL', 50)->nullable();
            $table->string('Girdle', 50)->nullable();
            $table->string('Girdle_', 50)->nullable();
            $table->string('BIT', 50)->nullable();
            $table->string('BIC', 50)->nullable();
            $table->string('WIT', 50)->nullable();
            $table->string('WIC', 50)->nullable();
            $table->string('MILKY', 50)->nullable();
            $table->string('LIns', 50)->nullable();
            $table->string('LUS', 50)->nullable();
            $table->string('OPPV', 50)->nullable();
            $table->string('OPTA', 50)->nullable();
            $table->string('OPCR', 50)->nullable();
            $table->float('CA', 10, 0)->nullable();
            $table->float('CH', 10, 0)->nullable()->index('idx_cert');
            $table->float('PA', 10, 0)->nullable()->index('PA');
            $table->string('PHP', 50)->nullable();
            $table->string('CERT_NO', 15)->nullable();
            $table->string('Location', 60)->nullable();
            $table->string('RO', 50)->nullable();
            $table->string('EC', 50)->nullable();
            $table->string('Keytosymbol', 250)->nullable();
            $table->string('FancyColorDescription', 250)->nullable();
            $table->string('ImageLink', 250)->nullable();
            $table->string('CertificateLink', 250)->nullable();
            $table->string('VideoLink', 250)->nullable();
            $table->integer('ImportIdx')->nullable()->index('ImportIdx');
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();

            $table->index(['id'], 'idx_importindex');
            $table->index(['Carat', 'Shape', 'Color', 'Clarity', 'Cut', 'CA'], 'idx_full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hkdiamondstock');
    }
};
