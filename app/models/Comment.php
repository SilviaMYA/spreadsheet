<?php

// app/models/Comment.php

class Comment extends Eloquent {
	protected $fillable = array('author', 'text');
}
