<?php

class Match extends Eloquent {
        // let eloquent know that these attributes will be available for mass assignment
	protected $fillable = array('my_char', 'op_char', 'result'); 
}

	
	