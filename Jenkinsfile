pipeline {
    agent any

    stages {
        stage("co") {
            steps {
                  sh "git checkout main"
             }
        }
        
        stage("rm") {
            steps {
                  sh "git rm README.md"
             }
        }
        
         stage("add") {
            steps {
                  sh "git add ."
             }
        }
        
         stage("commit") {
            steps {
                  sh "git commit -m 'Delete README.md file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git remote set-url origin git@github.com/apsyriodis/Full-Stack-Website.git"
             }
        }
    }
} 
