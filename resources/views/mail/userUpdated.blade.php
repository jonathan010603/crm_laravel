@component('mail::message')

# User #{{ $id }} updated succesfully
New user data below:
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