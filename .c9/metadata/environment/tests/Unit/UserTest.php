{"filter":false,"title":"UserTest.php","tooltip":"/tests/Unit/UserTest.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":9,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testExample()","    {","        $this->assertTrue(true);","    }","}",""],"id":2},{"start":{"row":9,"column":0},"end":{"row":25,"column":1},"action":"insert","lines":["{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testSave()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue($user->save());","    }","    public function testQuestions()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue(is_object($user->questions()->get()));","    }","}"]}],[{"start":{"row":0,"column":0},"end":{"row":25,"column":1},"action":"remove","lines":["<?php","","namespace Tests\\Unit;","","use Tests\\TestCase;","use Illuminate\\Foundation\\Testing\\WithFaker;","use Illuminate\\Foundation\\Testing\\RefreshDatabase;","","class UserTest extends TestCase","{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testSave()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue($user->save());","    }","    public function testQuestions()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue(is_object($user->questions()->get()));","    }","}"],"id":3},{"start":{"row":0,"column":0},"end":{"row":22,"column":1},"action":"insert","lines":["<?php","namespace Tests\\Unit;","use Tests\\TestCase;","use Illuminate\\Foundation\\Testing\\WithFaker;","use Illuminate\\Foundation\\Testing\\RefreshDatabase;","class UserTest extends TestCase","{","    /**","     * A basic unit test example.","     *","     * @return void","     */","    public function testSave()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue($user->save());","    }","    public function testQuestions()","    {","        $user = factory(\\App\\User::class)->make();","        $this->assertTrue(is_object($user->questions()->get()));","    }","}"]}]]},"ace":{"folds":[],"scrolltop":79.5,"scrollleft":0,"selection":{"start":{"row":14,"column":37},"end":{"row":14,"column":37},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1557034456137,"hash":"6318b81cb94554940082970c199bba9993859be0"}