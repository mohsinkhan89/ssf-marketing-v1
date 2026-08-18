@php
    $editorDescription = old('description', $contentPageRecord?->description ?? '<p></p>');
    $allowedRichTags = '<p><br><strong><b><em><i><u><s><strike><sub><sup><ul><ol><li><h1><h2><h3><h4><blockquote><pre><code><a><hr><table><thead><tbody><tr><th><td><span><div><font>';
    $editorDescription = preg_replace('/\s+on[a-z]+\s*=\s*("[^"]*"|\'[^\']*\'|[^\s>]+)/i', '', strip_tags($editorDescription, $allowedRichTags)) ?? '';
@endphp

<form class="dashboard-form" method="POST" action="{{ $action }}" data-rich-text-form>
    @csrf
    @if ($method)
        @method($method)
    @endif
    <label><span>Title</span><input type="text" name="title" value="{{ old('title', $contentPageRecord?->title) }}" placeholder="Privacy Policy" required data-slug-source></label>
    <label><span>Slug</span><input type="text" name="slug_preview" value="{{ old('slug_preview', $contentPageRecord?->slug) }}" placeholder="privacy-policy" readonly data-slug-target></label>
    <label class="full-span rich-text-field">
        <span>Description</span>
        <textarea class="rich-text-source" name="description" rows="10" data-rich-text-input>{{ $editorDescription }}</textarea>
        <div class="rich-text-toolbar" aria-label="Description formatting tools">
            <button type="button" data-rich-command="undo" title="Undo"><i class="fa-solid fa-rotate-left"></i></button>
            <button type="button" data-rich-command="redo" title="Redo"><i class="fa-solid fa-rotate-right"></i></button>
            <select data-rich-command="formatBlock" title="Text format">
                <option value="P">Paragraph</option>
                <option value="H1">Heading 1</option>
                <option value="H2">Heading 2</option>
                <option value="H3">Heading 3</option>
                <option value="H4">Heading 4</option>
                <option value="BLOCKQUOTE">Quote</option>
                <option value="PRE">Code block</option>
            </select>
            <select data-rich-command="fontSize" title="Font size">
                <option value="3">Normal</option>
                <option value="2">Small</option>
                <option value="4">Large</option>
                <option value="5">Extra large</option>
                <option value="6">Huge</option>
            </select>
            <button type="button" data-rich-command="bold" title="Bold"><i class="fa-solid fa-bold"></i></button>
            <button type="button" data-rich-command="italic" title="Italic"><i class="fa-solid fa-italic"></i></button>
            <button type="button" data-rich-command="underline" title="Underline"><i class="fa-solid fa-underline"></i></button>
            <button type="button" data-rich-command="strikeThrough" title="Strike"><i class="fa-solid fa-strikethrough"></i></button>
            <button type="button" data-rich-command="subscript" title="Subscript"><i class="fa-solid fa-subscript"></i></button>
            <button type="button" data-rich-command="superscript" title="Superscript"><i class="fa-solid fa-superscript"></i></button>
            <label class="rich-color" title="Text color"><i class="fa-solid fa-font"></i><input type="color" data-rich-command="foreColor" value="#052f41"></label>
            <label class="rich-color" title="Highlight color"><i class="fa-solid fa-fill-drip"></i><input type="color" data-rich-command="hiliteColor" value="#fff3a3"></label>
            <button type="button" data-rich-command="justifyLeft" title="Align left"><i class="fa-solid fa-align-left"></i></button>
            <button type="button" data-rich-command="justifyCenter" title="Align center"><i class="fa-solid fa-align-center"></i></button>
            <button type="button" data-rich-command="justifyRight" title="Align right"><i class="fa-solid fa-align-right"></i></button>
            <button type="button" data-rich-command="justifyFull" title="Justify"><i class="fa-solid fa-align-justify"></i></button>
            <button type="button" data-rich-command="insertUnorderedList" title="Bullet list"><i class="fa-solid fa-list-ul"></i></button>
            <button type="button" data-rich-command="insertOrderedList" title="Numbered list"><i class="fa-solid fa-list-ol"></i></button>
            <button type="button" data-rich-command="outdent" title="Outdent"><i class="fa-solid fa-outdent"></i></button>
            <button type="button" data-rich-command="indent" title="Indent"><i class="fa-solid fa-indent"></i></button>
            <button type="button" data-rich-action="link" title="Insert link"><i class="fa-solid fa-link"></i></button>
            <button type="button" data-rich-command="unlink" title="Remove link"><i class="fa-solid fa-link-slash"></i></button>
            <button type="button" data-rich-action="table" title="Insert table"><i class="fa-solid fa-table-cells"></i></button>
            <button type="button" data-rich-command="insertHorizontalRule" title="Horizontal line"><i class="fa-solid fa-minus"></i></button>
            <button type="button" data-rich-command="removeFormat" title="Remove format"><i class="fa-solid fa-eraser"></i></button>
        </div>
        <div class="rich-text-editor" contenteditable="true" data-rich-text-editor>{!! $editorDescription !!}</div>
    </label>
    <label><span>Status</span><select name="status" required><option value="published" @selected(old('status', $contentPageRecord?->status ?? 'published') === 'published')>Published</option><option value="draft" @selected(old('status', $contentPageRecord?->status ?? 'published') === 'draft')>Draft</option></select></label>
    <button class="primary-action form-submit" type="submit">{{ $method ? 'Save content page' : 'Add content page' }} <i class="fa-solid fa-arrow-right"></i></button>
</form>