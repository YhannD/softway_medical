document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('diagnosisForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const healthIndex = document.getElementById('healthIndex').value;
        const formData = new FormData();
        formData.append('healthIndex', healthIndex);

        fetch('index.php', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
            .then(response => response.json())
            .then(data => {
                if (Array.isArray(data.diagnosis)) {
                    document.getElementById('diagnosisResult').innerHTML = `<h2>Dirigez-vous vers l'unité médicale ou les unités médicales concernées</h2><ul>` +
                        data.diagnosis.map(pathology => `<li>${pathology}</li>`).join('') + `</ul>`;
                }
            })
            .catch(error => console.error('Error:', error));
    });
});
