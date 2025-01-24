import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const successMessage = document.querySelector('[data-success]')?.dataset.success;

    if (successMessage) {
        const toast = document.createElement('div');
        toast.innerHTML = `
        <div class="fixed top-4 right-4 z-50 max-w-md min-w-[250px] bg-green-600  border border-green-200 rounded-lg p-4">
            <div class="flex items-center justify-between text-white">
                <div class="flex flex-col">
                    <span class="text-sm">Success!</span>
                    <span class="font-semibold">${successMessage}</span>
                </div>
                <button class="ml-4 p-1 rounded">&times;</button>
            </div>
        </div>
        `;

        document.body.appendChild(toast);

        toast.querySelector('button').addEventListener('click', () => toast.remove());

        setTimeout(() => toast.remove(), 5000);
    }
});
