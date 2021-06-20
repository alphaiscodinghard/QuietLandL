<?php
namespace qll\forms;

use php\desktop\Mouse;
use std, gui, framework, qll;


class MainForm extends AbstractForm
{

    /**
     * @event close.click-Left 
     */
    function doCloseClickLeft(UXMouseEvent $e = null)
    {
        
        
        
        
        // Generated
        
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        
        app()->shutdown();
    }

    /**
     * @event minimize.click-Left 
     */
    function doMinimizeClickLeft(UXMouseEvent $e = null)
    {
        
        
        
        
        // Generated
        
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        
        
        $this->iconified = true;; //заныкал
    }



}
