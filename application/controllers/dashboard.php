<?php
class muwidgets_dashboard extends wv48fv_action {
	public function muwidgetsWPmenuMeta($return) {
		$return ['menu'] = '';
		$return ['title'] = $this->application()->name;
		return $return;
	}
	public function widgetsActionMeta($return) {
		$return ['link_name'] = $return ['title'];
		$return ['url'] = $this->dashboard('Appearance','Widgets')->url;
		$return ['classes'] [] = 'v48fv_16x16_settings';
		$return ['priority'] = -1;
		return $return;
	}
}
		