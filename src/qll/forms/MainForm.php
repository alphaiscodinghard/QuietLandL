<?php
namespace qll\forms;

use php\desktop\Mouse;
use std, gui, framework, qll;


class MainForm extends AbstractForm
{

    /**
     * @event imageAlt.click-Left 
     */
    function doImageAltClickLeft(UXMouseEvent $e = null)
    {
        
        
        
        
        // Generated
        
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        
        app()->shutdown();
    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {
        
        
        
        
        // Generated
        
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        
        $this->iconified = true;; //заныкал
    }



}
