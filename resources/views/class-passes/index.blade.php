<h1>Showing all Class Passes</h1>

@forelse ($classPasses as $classPass)
<li><a href="./class-passes/{{ $classPass->id }}">{{ $classPass->title }}</a></li>
@empty
    <p> 'No class passes yet' </p>
@endforelse