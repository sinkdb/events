<?

class HomeView extends events\View {
	
	public function show()
	{
		$tpl = array();

		Layout::addPageTitle("Events");

		return PHPWS_Template::process($tpl, 'events', 'home.tpl');
	}
}