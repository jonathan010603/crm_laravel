@component('mail::message')
    
# Success!

User #{{ $id }} updated
<br>
<br>
<br>
| First name |
|:-----------|
| {{$firstName}} 

<br>

| Last name |
|:-----------|
| {{$lastName}} 

<br>

| Email |
|:-----------|
| {{$email}} 

<br>

| Phone |
|:-----------|
| {{$phone}} 

@endcomponent