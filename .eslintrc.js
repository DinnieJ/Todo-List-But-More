module.exports = {
    "root": true,
    "extends": [
        'eslint:recommended'
    ],
    parserOption: {
        ecmaVersion: 6,
        sourceType: 'module',
        ecmaFeatures: {
            jsx: true
        }
    },
    env: {
        browser: true,
        es6: true,
        node: true
    },
    rules: {
        "no-console": 0,
        "no-unused-var": 0
    }
}