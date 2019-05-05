{"filter":false,"title":"2019_05_05_055344_create_answers_table.php","tooltip":"/database/migrations/2019_05_05_055344_create_answers_table.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":31,"column":0},"action":"remove","lines":["<?php","","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","","class CreateAnswersTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('answers', function (Blueprint $table) {","            $table->bigIncrements('id');","            $table->timestamps();","        });","    }","","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('answers');","    }","}",""],"id":2},{"start":{"row":0,"column":0},"end":{"row":30,"column":1},"action":"insert","lines":["<?php","use Illuminate\\Support\\Facades\\Schema;","use Illuminate\\Database\\Schema\\Blueprint;","use Illuminate\\Database\\Migrations\\Migration;","class CreateAnswersTable extends Migration","{","    /**","     * Run the migrations.","     *","     * @return void","     */","    public function up()","    {","        Schema::create('answers', function (Blueprint $table) {","            $table->increments('id');","            $table->integer('user_id');","            $table->integer('question_id');","            $table->longText('body');","            $table->timestamps();","        });","    }","    /**","     * Reverse the migrations.","     *","     * @return void","     */","    public function down()","    {","        Schema::dropIfExists('answers');","    }","}"]}]]},"ace":{"folds":[],"scrolltop":47,"scrollleft":0,"selection":{"start":{"row":30,"column":1},"end":{"row":30,"column":1},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1557035788059,"hash":"6010815f5323f446566e30ba1a5ee76d0bc63566"}