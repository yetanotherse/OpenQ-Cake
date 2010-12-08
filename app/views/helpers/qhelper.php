<?php

class QhelperHelper extends Helper {

	var $helpers = array('Html');

	function current_count($votes_data)
	{
		$upcount = 0;
		$downcount = 0;
                foreach($votes_data as $vote) {
                        if($vote['type'] == 'up')
                                $upcount++;
                        if($vote['type'] == 'down')
                                $downcount++;
                }
		return $upcount - $downcount;
	}

	function calculate_qvotes($votes_data)
	{
                $upcount = 0;
                $downcount = 0;
                foreach($votes_data as $vote) {
                        if($vote['QuestionsVote']['type'] == 'up')
                                $upcount++;
                        if($vote['QuestionsVote']['type'] == 'down')
                                $downcount++;
                }
                return $upcount - $downcount;
	}

        function calculate_avotes($votes_data)
        {
                $upcount = 0;
                $downcount = 0;
                foreach($votes_data as $vote) {
                        if($vote['AnswersVote']['type'] == 'up')
                                $upcount++;
                        if($vote['AnswersVote']['type'] == 'down')
                                $downcount++;
                }
                return $upcount - $downcount;
        }
}

?>
