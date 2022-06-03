    const puppeteer = require('puppeteer');

	async function scrapeProduct(url){

		const browser = await puppeteer.launch();
		const page = await browser.newPage();
		await page.goto(url);

		const [el] = await page.$x('//*[@id="totaltxns"]');

        const txt = await el.getProperty('textContent');

        const srcText = await txt.jsonValue();
		console.log(srcText);
		browser.close();

}

	var address = '';
	process.argv.forEach(function (val, index, array) {
			if(index == 2){
		 	 	address = val;
			}
		});

	scrapeProduct('https://bscscan.com/token/'+address);

