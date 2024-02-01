const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
	event.preventDefault();
	const reportType = form.elements['reportType'].value;
	if (reportType === 'appointmentSchedule') {
		// Make API call to retrieve appointment data
		fetch('/api/appointments')
			.then(response => response.json())
			.then(appointments => {
				// Format appointment data into a table
				let table = '<table>';
				table += '<tr><th>Date</th><th>Pet Name</th><th>Owner Name</th><th>Notes</th></tr>';
				for (let appointment of appointments) {
					table += `<tr><td>${appointment.date}</td><td>${appointment.petName}</td><td>${appointment.ownerName}</td><td>${appointment.notes}</td></tr>`;
				}
				table += '</table>';
				// Display table on page
				const reportContainer = document.createElement('div');
				reportContainer.innerHTML = table;
				document.body.appendChild(reportContainer);
			});
	}
});
