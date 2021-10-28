let quill = new Quill('#editor', {
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, 4, 5, 6,  false] }],
            ['bold', 'italic', 'underline','strike'],
            ['image', 'code-block'],
            ['link'],
            [{ 'script': 'sub'}, { 'script': 'super' }],
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            ['clean']
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'
})

quill.on('text-change', function(delta, oldDelta, source){
    let html = quill.root.innerHTML
    let desc = document.getElementById('description')
    desc.value = html
})
