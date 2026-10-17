const deleteForm = document.querySelector('.delete-form');

if (deleteForm) {
    deleteForm.addEventListener('submit', (event) => {
        const confirmed = window.confirm('本当に削除しますか');

        if (!confirmed) {
            event.preventDefault();
        }
    });
}

const contentInput = document.querySelector('.js-content-input');
const characterCount = document.querySelector('.js-character-count');

if (contentInput && characterCount) {
    const updateCharacterCount = () => {
        characterCount.textContent = contentInput.value.length;
    };

    updateCharacterCount();

    contentInput.addEventListener('input', updateCharacterCount);
}