import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import Paragraph from '@editorjs/paragraph';
import ImageTool from '@editorjs/image';
import List from '@editorjs/list';
import Quote from '@editorjs/quote';
import axios from 'axios';

class CustomImageTool extends ImageTool {
    delete() {
        if (confirm('Are you sure you want to delete this image?')) {
            const blockId = this.api.blocks.getCurrentBlockIndex();
            const block = this.api.blocks.getBlockByIndex(blockId);
            const image = block.data.file;

            axios.post('/delete-image', { image: image.url })
                .then(response => {
                    console.log('Image deleted successfully:', response.data.message);
                    super.delete();
                })
                .catch(error => {
                    console.error('Error deleting image:', error);
                });
        }
    }
}


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
        image: {
            class: CustomImageTool, // Use your custom tool
            config: {
                endpoints: {
                    byFile: 'upload-image',
                },
                additionalRequestHeaders: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
            },
        },
        list: {
            class: List,
            inlineToolbar: true
        },
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
