const name = document.querySelector('#name')
const result = document.querySelector('#result')
const saveScoreBtn = document.querySelector('#saveScoreBtn')
const finalScore = document.querySelector('#finalScore')
const mostRecentScore = localStorage.getItem('mostRecentScore')

const highScores = JSON.parse(localStorage.getItem('highScores')) || []

// const MAX_HIGH_SCORES = 10

finalScore.innerText = " Total Score : " + mostRecentScore

username.addEventListener('keyup', () => {
    saveScoreBtn.disabled = !username.value
})


saveHighScore = e => {
    e.preventDefault();
    var t;
    var r = window.location.search.split("=")[1];

    fetch("./questions.json")
        .then((response) => response.json())
        .then((data) => {
            subCat = data.Subcategories.filter((cat) =>
                cat.id === r
            )
            t = subCat[0] && subCat[0].Subcategory;
            // console.log(t);

            const score = {
                score: mostRecentScore,
                name: username.value,
                category: t
            }
            highScores.push(score)

            highScores.sort((a, b) => {
                return b.score - a.score
            })
            highScores.splice(10)
            localStorage.setItem('highScores', JSON.stringify(highScores))
        });

    document.querySelector("#scoresaved").style.display = 'block'
    document.querySelector("#ldb").style.display = 'block'

    var elements = ['#saveScoreBtn', '#name', '#end-text'];
    elements.forEach(x => {
        document.querySelector(x).style.display = 'none';
    });

}