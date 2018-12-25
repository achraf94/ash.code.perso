var router = require('express').Router();


router.get('/' ,(req,res)=> {res.send('<h1>salut</h1>')});
module.exports = router;