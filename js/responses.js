function getBotResponse(input) {
    //rock paper scissors
    if (input == "Hey" ||input=="hey" || input=="Hello"|| input=="hello") {
        return "How are feeling today?";
    } 
    else if (input == "happy"||input=="sad"||input=="tired") {
        return "Tell us more about it";
    } 
    else if (input == "I won a competition"||input=="I lost a friend today") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else {
        return "Try asking something else!";
    }
}