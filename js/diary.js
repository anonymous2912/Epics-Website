showNotes();

// If user adds a note, add it to the localStorage
let addBtn = document.getElementById("addBtn");
addBtn.addEventListener("click", function(e) {
	let addTxt = document.getElementById("addTxt");
	let notes = localStorage.getItem("notes");

	if (notes == null) notesObj = [];
	else notesObj = JSON.parse(notes);

	notesObj.push(addTxt.value);
	localStorage.setItem("notes", JSON.stringify(notesObj));
	addTxt.value = "";

	showNotes();
});

// Function to show elements from localStorage
function showNotes() {
	let notes = localStorage.getItem("notes");

	if (notes == null) notesObj = [];
	else notesObj = JSON.parse(notes);

	let html = "";

	notesObj.forEach(function(element, index) {
		html += `<div class="noteCard my-2 mx-2 card"
			style="width: 18rem; box-shadow: 4px 4px 3px #c7c7c7; background-color:#f5f8fd; border-radius:10px">
				<div class="card-body">
					<h4 class="card-title">
						Page ${index + 1}
					</h4>
					<p class="card-text">
						${element}
					</p>

				<button id="${index}" onclick=
					"deleteNote(this.id)"
					class="btn btn-danger btn-small">
					Delete Note
				</button>
			</div>
		</div>`;
	});

	let notesElm = document.getElementById("notes");

	if (notesObj.length != 0) notesElm.innerHTML = html;
	else
		notesElm.innerHTML = `Nothing to show!
		Use "Add a Note" section above to add notes.`;
}

// Function to delete a note
function deleteNote(index) {
	let notes = localStorage.getItem("notes");

	if (notes == null) notesObj = [];
	else notesObj = JSON.parse(notes);

	notesObj.splice(index, 1);

	localStorage.setItem("notes",
		JSON.stringify(notesObj));

	showNotes();
}
