class Guesser {
    constructor(number, lives) {
        this.number = number;
        this.lives = lives;
    }

    guess(n) {
        this.lives
        if (this.lives > 0) {
            if (n == this.number) {
                return true
            } else {
                return false
            }
        } else {
            throw ("Lives ran out should throw")
        }
    }
}

let guesser = new Guesser(10, 2)
guesser.guess(10)