pipeline {
    agent any

    stages {
        stage("co") {
            steps {
                  sh "git checkout main"
             }
        }
        
        stage("pull") {
            steps {
                  sh "git pull"
             }
        }
        
        stage("rm") {
            steps {
                  sh "git rm test.index"
             }
        }
        
         stage("add") {
            steps {
                  sh "git add ."
             }
        }
        
         stage("commit") {
            steps {
                  sh "git commit -m 'Delete test.index file'"
             }
        }
        
          stage("push") {
            steps {
                  sh "git remote set-url origin git@github.com/apsyriodis/Full-Stack-Website.git"
             }
        }
    }
} 
