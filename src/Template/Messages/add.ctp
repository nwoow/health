<!-- File: src/Template/Articles/add.ctp -->

<h1>Send Messages</h1>
<?php

    echo $pid;
	 echo $did;
    echo $this->Form->create($message);
    echo $this->Form->input('title');
    echo $this->Form->input('message', ['rows' => '3']);
	echo $this->Form->hidden('user1', ['value'=>$did]);
	echo $this->Form->hidden('user2', ['value'=>$pid]);
    echo $this->Form->button(__('Send Messages'));
    echo $this->Form->end();
?>