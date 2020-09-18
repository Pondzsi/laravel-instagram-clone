@component('mail::message')
Hello **{{$name}}**,  
Welcome to the InstagramClone!

This application was made by Pondzsi using Laravel!

Click below to see my GitHub repositories.
@component('mail::button', ['url' => 'https://github.com/Pondzsi'])
Go To Github
@endcomponent
Thanks,  
Pondzsi
@endcomponent