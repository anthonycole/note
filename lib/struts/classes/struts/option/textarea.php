<?php

class Struts_Option_TextArea extends Struts_Option {
	protected $_is_url;

	public function input_html() {
		$id = esc_attr( $this->html_id() );
		$name = esc_attr( $this->html_name() );
		$value = esc_attr( $this->value() );

		echo "<textarea type='text' id='$id' name='$name' cols='40' rows='8' />$value</textarea>";
	}

	protected function standard_validation( $value ) {
		return trim( $value );
	}
}