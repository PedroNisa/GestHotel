<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.     * 
     * Define la plantilla base del diseño
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

}
