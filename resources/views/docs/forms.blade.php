<div class="card">
    <h2><a name="forms">Forms</a></h2>

    <x-tabs name="preview">
        <x-tabs.header>
            <x-tabs.link name="preview">Preview</x-tabs.link>
            <x-tabs.link name="code">Code</x-tabs.link>
        </x-tabs.header>

        <x-tabs.div name="preview">
            @include('docs.examples.forms')
        </x-tabs.div>

        <x-tabs.div name="code">
            <pre><code class="language-blade">@php
                // The example form is in a separate file to avoid duplication.
                // We can display the raw content of that file.
                $filePath = resource_path('views/docs/examples/forms.blade.php');
                if (file_exists($filePath)) {
                    echo e(file_get_contents($filePath));
                } else {
                    echo "Example file not found.";
                }
            @endphp</code></pre>
        </x-tabs.div>

    </x-tabs>
</div>
