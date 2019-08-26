@component('mail::message')
# New Project: {{ $project->name }}

Description: {{ $project->description }}

Date: {{ $project->created_at }}

@component('mail::button', ['url' => url('/project/' . $project->id)])
Go to Project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
