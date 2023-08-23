@props([
    'title' => '',
    ])
<div>
    <!-- Header -->
    <header class="bg-surface-primary border-bottom pt-6">
        <div class="container-fluid">
            <div class="mb-npx">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <center>
                            <h1 class="h2 mb-0 ls-tight">{{ $title }}</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>