<?php
//include_once('../../../../../../wp-includes/class-wpdb.php');
//global $wpdb;
class PHP_Email_Form{
        public $to, $from_name, $from_email,$subject, $ajax,$message;
        public function send($wpdb){
            if($this->from_email=='' || $this->from_name=='' || $this->subject=='' || $this->message =='')
            {
                echo 'Please fill up required field data marked as *';
            }
            else if (filter_var($this->from_email, FILTER_VALIDATE_EMAIL)) {
                  $name=$this->from_name;
                  $headers = ['From' => ($name?"<$name> ":'').$this->from_name,
                          'X-Mailer' => 'PHP/' . phpversion()
                        ];
                $sent_mes= nl2br($this->message);
               /* if(mail($this->to, $this->subject, $sent_mes."\r\n\r\nfrom: ".$_SERVER['REMOTE_ADDR'], $headers))
                {
                    $thanks_mes = '
                    <p><b>Hello $this->from_name</b>,</p>
                    <p>Thanks your for your interest. I will Review your requirement and will reply you soon.</p>
                    <p>Thanks & Regards,</p>
                    <p><b>Hiral Shihora</b></p>
                    ';

                      $tsubject = 'Inquiry ';

                      $theaders  = "From: " . strip_tags($this->to) . "\r\n";
                      $theaders .= "MIME-Version: 1.0\r\n";
                      $theaders .= "Content-Type: text/html; charset=UTF-8\r\n";

                      $tmessage = '<p><strong>This is strong text</strong> while this is not.</p>';


                      mail($this->from_email, $tsubject, $tmessage, $thanks_mes);

                    $date = date('Y-m-d H:i:s');
                    $wpdb->insert(
                    'contact_enquiry',
                    array(
                    'fname' => "$this->from_name",
                    'femail' => "$this->from_email",
                    'subject' => "$this->subject",
                    'message' => "$this->message",
                    'is_sent' => "Y",
                    'enq_dt'  =>   "$date"
                    )); 
                    echo 'OK';
                }
                else
                { 
                  $date = date('Y-m-d H:i:s');
                   $wpdb->insert(
                    'contact_enquiry',
                    array(
                    'fname' => "$this->from_name",
                    'femail' => "$this->from_email",
                    'subject' => "$this->subject",
                    'message' => "$sent_mes",
                    'is_sent' => "N",
                    'enq_dt'  =>   "$date"
                   )); 
                   echo 'Opps, Something went Wrong! Email not send.';
                }*/
                $date = date('Y-m-d H:i:s');
                $wpdb->insert(
                 'contact_enquiry',
                 array(
                 'fname' => "$this->from_name",
                 'femail' => "$this->from_email",
                 'subject' => "$this->subject",
                 'message' => "$this->message",
                 'is_sent' => "Y",
                 'enq_dt'  =>   "$date"
                )); 
               $thanks_mes = "
                <p><b>Hello $this->from_name</b>,</p>
                <p>Thanks your for your interest. I will Review your requirement and will reply you soon.</p>
                <p>Thanks & Regards,</p>
                <p><b>Hiral Shihora</b></p>
                ";

                echo 'OK';
              }
              else {
                echo 'Wrong Email';
              }
        }
        private function add_message($name,$email,$subject,$message)
        {
            
        }
}


