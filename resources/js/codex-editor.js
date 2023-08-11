import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import Paragraph from '@editorjs/paragraph';
import ImageTool from '@editorjs/image';
import List from '@editorjs/list';
import Quote from '@editorjs/quote';

const editor = new EditorJS({
    placeholder: 'Let`s write an awesome story!',
    holder: 'editorjs',
    tools: {
        header: {
            class: Header,
            inlineToolbar: ['link']
        },
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
        },
        image: ImageTool,
        list: {
            class: List,
            inlineToolbar: true
          } ,
        quote: Quote,
    },
});

function saveData() {
    editor.save()
        .then(outputData => {
            // Send outputData to your Laravel backend
            axios.post('/your-save-route', {
                content: outputData,
            })
                .then(response => {
                    console.log('Data saved successfully:', response.data);
                    // Redirect to the blog list or other page as needed
                    window.location.href = '/blog-list';
                })
                .catch(error => {
                    console.error('Saving failed:', error);
                });
        })
        .catch(error => {
            console.error('Saving failed:', error);
        });
}
