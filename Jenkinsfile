pipeline {
  agent any
  stages {
    stage('Build') {
      agent any
      steps {
        sh 'docker-compose up -d'
      }
    }
//     stage('PHP CS Fixer') {
//       steps {
//         sh 'php-cs-fixer fix --dry-run --no-interaction --diff -vvv src/'
//       }
//     }
    stage('Test') {
      steps {
        sh 'docker exec  php ./bin/phpunit --coverage-clover=\'reports/coverage/coverage.xml\' --coverage-html=\'reports/coverage\''
      }
    }
//     stage('Coverage') {
//       steps {
//         step([$class: 'CloverPublisher'undefined cloverReportDir: '/reports/coverage'undefined cloverReportFileName: 'coverage.xml'])
//       }
//     }
  }
}
