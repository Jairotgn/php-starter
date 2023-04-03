<?php

//Send notification email contact form
function sendContactEmail($data) {
    if ($data['email'] && $data['phone'] && $data['message']) {
        $message = "{$data['email']}  {$data['phone']} {$data['message']}";
        mail('notify@me.com', 'New Contact Message', $message);
    }
}