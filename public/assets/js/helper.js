function sendMessage(contener_id) {
    let message = document.getElementById(contener_id).value;
    
    fetch("/send-message", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: message })
    }).then(response => response.json())
    .then(data => console.log("Message envoyé:", data));
}