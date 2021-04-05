@var DEMO
public $demo;
@return void
public function_construct($demo)
{
$this -> demo=$demo;
@return $this
public function build(){
return $this -> from('aizhans2018@gmail.com')

 ->view('mails.demo')
->text('mails.demo_plain')
->with(['testVarOne' => '1', 'testVarTwo' => '2']);
