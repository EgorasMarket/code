require("dotenv").config;
const Egoras = artifacts.require("./Egoras");

/**
 * @author blOX Consulting LLC
 * @date 8.26.19
 * Truffle migration TestGroup
 */
module.exports = async deployer => {
    await deployer.deploy(Egoras, "EGORAS", "EGR", 18, 0);
};